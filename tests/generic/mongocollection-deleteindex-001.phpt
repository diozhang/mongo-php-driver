--TEST--
MongoCollection::deleteIndex()
--SKIPIF--
<?php require_once "tests/utils/standalone.inc"; ?>
--FILE--
<?php
require_once "tests/utils/server.inc";
$m = mongo_standalone();
$name = dbname();
$d = $m->$name;
$c = $d->deleteIndex;
$c->drop();

echo "Delete with keys\n";
$c->ensureIndex( array( 'surname' => 1, 'name' => 1 ) );
var_dump( count( $c->getIndexInfo() ) );
$c->deleteIndex( array( 'surname' => 1, 'name' => 1 ) );
var_dump( count( $c->getIndexInfo() ) );

echo "Delete with name\n";
$c->ensureIndex( array( 'surname' => 1, 'name' => 1 ) );
var_dump( count( $c->getIndexInfo() ) );
/* This is actually cheating, as for some annoying (but documented) reason, a
 * string is not an index name, but a field name. */
$c->deleteIndex( 'surname_1_name');
var_dump( count( $c->getIndexInfo() ) );
?>
--EXPECT--
Delete with keys
int(2)
int(1)
Delete with name
int(2)
int(1)
