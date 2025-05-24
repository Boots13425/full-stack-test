const mysql = require('mysql2/promise');

const dbConfig = {
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'groupon_db',
    port: 3306
};

const pool = mysql.createPool(dbConfig);
module.express = pool;