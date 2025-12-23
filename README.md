## ⛓️ Chain
Learning Fluent API (⛓️ Chaining method) in PHP 8+ like JavaScript/TypeScript, others programming languages.

---

### Example
**JavaScript**
```javascript
const ajax = new XMLHttpRequest();
ajax.send();
```

**PHP**
```php
$db = new DBQuery();
$user_name = $db->select('name', 'email')
                 ->from('users')
                 ->where('id', 2);
```

---
