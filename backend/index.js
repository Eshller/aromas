const express = require('express')
const app = express()
const fs = require('fs')
const server = require('http').createServer(app)
var cors = require('cors');

server.listen(3000)

app.use(express.json())
app.use(cors());

items = [["Coke", 0, 40, 1],
        ["Chips", 0, 10, 1],
        ["Sandwich", 0, 60, 0],
        ["Paratha", 0, 36, 1],
        ["Chicken Shourma", 1, 41, 1]]

app.get("/get_items", async(req, res) => {
    res.status(201).send({items: items})
})

app.post("/take_order", async(req, res) => {
    console.log(req.body)
    res.status(201).send({token: 1})
})

app.post("/get_items", async(req, res) => {
    res.status(201).send({confirm: 1})
})


