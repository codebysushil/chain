$db = new DBQuery();
$user_name = $db->select('name', 'email')
                 ->from('users')
                 ->where('id', 2);
