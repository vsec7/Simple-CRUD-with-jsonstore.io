# Simple-CRUD-with-jsonstore.io
Create, Read, Update, Delete with jsonstore.io

#### Created By Versailles ~ Sec7or Team

## How To Use ?

### Include & Set Your jsonstore.io db
```
include("jsondb.php");
$db = "https://www.jsonstore.io/606c802e5c0b0c7ee99e0fba4dca0fbe7515a58a3397f289dfd34c1844d63d6b";
```

### Insert Data
```
$user = array("name" => "Sarah Olivia", "nick" => "viloid");
echo insert($db, "user/1", json_encode($user));
$user2 = array("name" => "Karin", "nick" => "cans");
echo insert($db, "user/2", json_encode($user2));
```
```
Result :
{"ok":true} // Success Inserted
```

### Fetch One Data
```
echo get($db, "user/1");
```
```
Result :
{"result":{"name":"Sarah Olivia","nick":"viloid"},"ok":true}
```

### Fetch All Data
```
echo getAll($db);
```
```
Result :
{"result":{"user":[null,{"name":"Sarah Olivia","nick":"viloid"},{"name":"Karin","nick":"cans"}]},"ok":true}
```

### Update Data
```
$update = array("name" => "putri", "nick" => "wxyz");
echo update($db, "user/2", json_encode($update));
```
```
Result :
{"ok":true} // Success Updated
```

### Delete Data
```
echo delete($db, "user/2");
```
```
Result :
{"ok":true} // Success Deleted
```

See : **example.php**

Thanks :) I miss You :)
