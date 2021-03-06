--TEST--
Test for PHP-270: ext/mongo classes should return meaningful results from Reflection API
--FILE--
<?php
$classes = array(
    'Mongo',
    'MongoClient',
    'MongoDB',
    'MongoCollection',
    'MongoCursor',
    'MongoCommandCursor',
    'MongoPool',
);
foreach ($classes as $class) {
	echo $class, "\n";
    $r = new ReflectionClass($class);
    $methods = $r->getMethods();

	foreach ($methods as $m) {
	    echo "  Method ", $m->getName(), " expects ", $m->getNumberOfParameters(), " parameters\n";
	    foreach ($m->getParameters() as $p) {
	        echo '    ', $p->getPosition() , ': ' , $p->getName() , ($p->isOptional() ? ' (optional)' : ''), "\n";
	    }
	}
	echo "\n";
}
?>
--EXPECT--
Mongo
  Method __construct expects 2 parameters
    0: server (optional)
    1: options (optional)
  Method connectUtil expects 0 parameters
  Method getSlaveOkay expects 0 parameters
  Method setSlaveOkay expects 1 parameters
    0: slave_okay (optional)
  Method lastError expects 0 parameters
  Method prevError expects 0 parameters
  Method resetError expects 0 parameters
  Method forceError expects 0 parameters
  Method getSlave expects 0 parameters
  Method switchSlave expects 0 parameters
  Method setPoolSize expects 1 parameters
    0: size
  Method getPoolSize expects 0 parameters
  Method poolDebug expects 0 parameters
  Method getConnections expects 0 parameters
  Method connect expects 0 parameters
  Method __toString expects 0 parameters
  Method __get expects 1 parameters
    0: name
  Method selectDB expects 1 parameters
    0: database_name
  Method selectCollection expects 2 parameters
    0: database_name
    1: collection_name (optional)
  Method getReadPreference expects 0 parameters
  Method setReadPreference expects 2 parameters
    0: read_preference
    1: tags (optional)
  Method getWriteConcern expects 0 parameters
  Method setWriteConcern expects 2 parameters
    0: w
    1: wtimeout (optional)
  Method dropDB expects 1 parameters
    0: MongoDB_object_OR_database_name
  Method listDBs expects 0 parameters
  Method getHosts expects 0 parameters
  Method close expects 0 parameters
  Method killCursor expects 1 parameters
    0: cursor_id

MongoClient
  Method __construct expects 2 parameters
    0: server (optional)
    1: options (optional)
  Method getConnections expects 0 parameters
  Method connect expects 0 parameters
  Method __toString expects 0 parameters
  Method __get expects 1 parameters
    0: name
  Method selectDB expects 1 parameters
    0: database_name
  Method selectCollection expects 2 parameters
    0: database_name
    1: collection_name (optional)
  Method getReadPreference expects 0 parameters
  Method setReadPreference expects 2 parameters
    0: read_preference
    1: tags (optional)
  Method getWriteConcern expects 0 parameters
  Method setWriteConcern expects 2 parameters
    0: w
    1: wtimeout (optional)
  Method dropDB expects 1 parameters
    0: MongoDB_object_OR_database_name
  Method listDBs expects 0 parameters
  Method getHosts expects 0 parameters
  Method close expects 0 parameters
  Method killCursor expects 1 parameters
    0: cursor_id

MongoDB
  Method __construct expects 2 parameters
    0: connection
    1: database_name
  Method __toString expects 0 parameters
  Method __get expects 1 parameters
    0: name
  Method getGridFS expects 1 parameters
    0: prefix (optional)
  Method getSlaveOkay expects 0 parameters
  Method setSlaveOkay expects 1 parameters
    0: slave_okay (optional)
  Method getReadPreference expects 0 parameters
  Method setReadPreference expects 2 parameters
    0: read_preference
    1: tags (optional)
  Method getWriteConcern expects 0 parameters
  Method setWriteConcern expects 2 parameters
    0: w
    1: wtimeout (optional)
  Method getProfilingLevel expects 0 parameters
  Method setProfilingLevel expects 1 parameters
    0: level
  Method drop expects 0 parameters
  Method repair expects 2 parameters
    0: keep_cloned_files (optional)
    1: backup_original_files (optional)
  Method selectCollection expects 1 parameters
    0: collection_name
  Method createCollection expects 1 parameters
    0: collection_name
  Method dropCollection expects 1 parameters
    0: collection_name
  Method listCollections expects 1 parameters
    0: includeSystemCollections (optional)
  Method getCollectionNames expects 1 parameters
    0: includeSystemCollections (optional)
  Method getCollectionInfo expects 1 parameters
    0: includeSystemCollections (optional)
  Method createDBRef expects 2 parameters
    0: collection_name
    1: array_with_id_fields_OR_MongoID
  Method getDBRef expects 1 parameters
    0: reference_information
  Method execute expects 2 parameters
    0: javascript_code
    1: arguments (optional)
  Method command expects 3 parameters
    0: command
    1: options (optional)
    2: hash (optional)
  Method lastError expects 0 parameters
  Method prevError expects 0 parameters
  Method resetError expects 0 parameters
  Method forceError expects 0 parameters
  Method authenticate expects 2 parameters
    0: username
    1: password

MongoCollection
  Method __construct expects 2 parameters
    0: database
    1: collection_name
  Method __toString expects 0 parameters
  Method __get expects 1 parameters
    0: name
  Method getName expects 0 parameters
  Method getSlaveOkay expects 0 parameters
  Method setSlaveOkay expects 1 parameters
    0: slave_okay (optional)
  Method getReadPreference expects 0 parameters
  Method setReadPreference expects 2 parameters
    0: read_preference
    1: tags (optional)
  Method getWriteConcern expects 0 parameters
  Method setWriteConcern expects 2 parameters
    0: w
    1: wtimeout (optional)
  Method drop expects 0 parameters
  Method validate expects 1 parameters
    0: validate (optional)
  Method insert expects 2 parameters
    0: array_of_fields_OR_object
    1: options (optional)
  Method batchInsert expects 2 parameters
    0: documents
    1: options (optional)
  Method update expects 3 parameters
    0: old_array_of_fields_OR_object
    1: new_array_of_fields_OR_object
    2: options (optional)
  Method remove expects 2 parameters
    0: array_of_fields_OR_object (optional)
    1: options (optional)
  Method find expects 2 parameters
    0: query (optional)
    1: fields (optional)
  Method findOne expects 3 parameters
    0: query (optional)
    1: fields (optional)
    2: options (optional)
  Method findAndModify expects 4 parameters
    0: query
    1: update (optional)
    2: fields (optional)
    3: options (optional)
  Method createIndex expects 2 parameters
    0: array_of_keys
    1: options (optional)
  Method ensureIndex expects 2 parameters
    0: key_OR_array_of_keys
    1: options (optional)
  Method deleteIndex expects 1 parameters
    0: string_OR_array_of_keys
  Method deleteIndexes expects 0 parameters
  Method getIndexInfo expects 0 parameters
  Method count expects 3 parameters
    0: query_AS_array_of_fields_OR_object (optional)
    1: options_OR_limit (optional)
    2: skip (optional)
  Method save expects 2 parameters
    0: array_of_fields_OR_object
    1: options (optional)
  Method createDBRef expects 1 parameters
    0: array_with_id_fields_OR_MongoID
  Method getDBRef expects 1 parameters
    0: reference
  Method toIndexString expects 1 parameters
    0: string_OR_array_of_keys
  Method group expects 4 parameters
    0: keys_or_MongoCode
    1: initial_value
    2: array_OR_MongoCode
    3: options (optional)
  Method distinct expects 2 parameters
    0: key
    1: query (optional)
  Method aggregate expects 3 parameters
    0: pipeline
    1: op (optional)
    2: ... (optional)
  Method aggregateCursor expects 2 parameters
    0: pipeline
    1: options (optional)
  Method parallelCollectionScan expects 2 parameters
    0: num_cursors
    1: options (optional)

MongoCursor
  Method __construct expects 4 parameters
    0: connection
    1: database_and_collection_name
    2: query (optional)
    3: array_of_fields_OR_object (optional)
  Method hasNext expects 0 parameters
  Method getNext expects 0 parameters
  Method limit expects 1 parameters
    0: number
  Method batchSize expects 1 parameters
    0: number
  Method skip expects 1 parameters
    0: number
  Method fields expects 1 parameters
    0: fields
  Method maxTimeMS expects 1 parameters
    0: ms
  Method addOption expects 2 parameters
    0: key
    1: value
  Method snapshot expects 0 parameters
  Method sort expects 1 parameters
    0: fields
  Method hint expects 1 parameters
    0: keyPattern
  Method explain expects 0 parameters
  Method setFlag expects 2 parameters
    0: bit
    1: set (optional)
  Method slaveOkay expects 1 parameters
    0: okay (optional)
  Method tailable expects 1 parameters
    0: tail (optional)
  Method immortal expects 1 parameters
    0: liveForever (optional)
  Method awaitData expects 1 parameters
    0: wait (optional)
  Method partial expects 1 parameters
    0: okay (optional)
  Method getReadPreference expects 0 parameters
  Method setReadPreference expects 2 parameters
    0: read_preference
    1: tags (optional)
  Method doQuery expects 0 parameters
  Method timeout expects 1 parameters
    0: timeoutMS
  Method info expects 0 parameters
  Method dead expects 0 parameters
  Method current expects 0 parameters
  Method key expects 0 parameters
  Method next expects 0 parameters
  Method rewind expects 0 parameters
  Method valid expects 0 parameters
  Method reset expects 0 parameters
  Method count expects 1 parameters
    0: foundOnly (optional)

MongoCommandCursor
  Method __construct expects 3 parameters
    0: connection
    1: database_and_collection_name
    2: query (optional)
  Method batchSize expects 1 parameters
    0: number
  Method timeout expects 1 parameters
    0: timeoutMS
  Method info expects 0 parameters
  Method dead expects 0 parameters
  Method getReadPreference expects 0 parameters
  Method setReadPreference expects 2 parameters
    0: read_preference
    1: tags (optional)
  Method current expects 0 parameters
  Method key expects 0 parameters
  Method next expects 0 parameters
  Method rewind expects 0 parameters
  Method valid expects 0 parameters
  Method createFromDocument expects 3 parameters
    0: connection
    1: connection_hash
    2: cursor_document

MongoPool
  Method info expects 0 parameters
  Method setSize expects 1 parameters
    0: size
  Method getSize expects 0 parameters
