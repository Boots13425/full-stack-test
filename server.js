const express = require('express');
const path = require('path');
const bodyParser = require('body-parser');
const pool = require('./db');
const bcrypt = require('bcrypt');

const app = express();
const port = 3000;

//app.use(express.static(path.join(__dirname, 'insert.html')));
app.use(bodyParser.json());

app.get('/', (req, res) =>{
    res.sendFile(path.join(__dirname, 'signup.html'));
});

app.post('/signup', async (req, res) =>{
    try{
        const{ name,email, password} = req.body;

        const errors = {};
        if(!name)
        {
            errors.name = "user name is required"
        }
        if(!email)
            {
                errors.email = "email is required"
            }
            if(!password)
                {
                    errors.password = "password is required"
                }

        if(Object.keys(errors).length > 0){
            return res.status(400).json({successs: false, errors})
        }

        const hashedPassword = await bcrypt.hash(password, 10);

const [existingUser] = await pool.query('SELECT * FROM user WHERE name =? OR email =?',[name, email]);
    if (existingUser.length > 0){
    return res.status(409).json({message: 'this username or email already exists'});
        }

const [result] = await pool.query('INSERT * INTO user (name, email, password) values (?,?,?)', [name, email, hashedPassword]);
res.status(201).json({message: 'user registered successfully', userId: result.insertId});
    } catch (error) {
        console.error('error registering user:',error);
        res.status(500).json({message: 'internal server error'});
    }
});

app.listen(port, () => {
    console.log(`server listening on http://localhost:${port}`);
});