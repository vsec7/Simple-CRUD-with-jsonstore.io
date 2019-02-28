<?php
include("jsondb.php"); // include jsondb.php

/*
    Simple C.R.U.D with jsonstore.io
    Created by versailles ~ Sec7or Team
    Uncommenting to test function :) Hope You Understand :D
*/

/*
	*Create DB
	Visit jsonstore.io lalu copy link sperti dibawah ini
*/
$db = "https://www.jsonstore.io/606c802e5c0b0c7ee99e0fba4dca0fbe7515a58a3397f289dfd34c1844d63d6b";


/*
	*Insert Data
	insert($jsonDb, $key, $jsonData);
*/
//$user = array("name" => "Sarah Olivia", "nick" => "viloid"); 
//echo insert($db, "user/1", json_encode($user)); // {"ok":true} | user seperti column nya , 1 seperti id. "user" bisa dirubah sesuai keinginan

//$user2 = array("name" => "Karin", "nick" => "cans");
//echo insert($db, "user/2", json_encode($user2)); // {"ok":true} | contoh nambah 1 data lagi , user/2


/*
	*Get Data
	get($jsonDb, $key);
*/
//echo get($db, "user/1"); // {"result":{"name":"Sarah Olivia","nick":"viloid"},"ok":true} | get data user 1

//echo get($db, "user/2"); // {"result":{"name":"Karin","nick":"cans"},"ok":true}


/*
	*Get All Data
	getAll($jsonDb);
*/
//echo getAll($db); // {"result":{"user":[null,{"name":"Sarah Olivia","nick":"viloid"},{"name":"Karin","nick":"cans"}]},"ok":true}


/*
	*Update Data
	update($jsonDb, $key, $jsonData);
*/
//$update = array("name" => "putri", "nick" => "wxyz");
//echo update($db, "user/2", json_encode($update)); // {"ok":true} // mengupdate value user 2 


/*
	*Delete Data
	delete($jsonDb, $key);
*/
//echo delete($db, "user/2"); // {"ok":true}
