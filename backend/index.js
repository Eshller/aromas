const express = require('express')
const app = express()
const fs = require('fs')
const server = require('http').createServer(app)
var cors = require('cors');

server.listen(3000)

app.use(express.json())
app.use(cors());

items = [
    {
        name: "Coke",
        is_veg: true,
        amt: 40,
        is_avlbl: true,
    },
    {
        name: "Chips",
        is_veg: true,
        amt: 10,
        is_avlbl: true,
    },
    {
        name: "Sandwich",
        is_veg: true,
        amt: 60,
        is_avlbl: true,
    },
    {
        name: "Paratha",
        is_veg: true,
        amt: 36,
        is_avlbl: true,
    },
    {
        name: "Chicken Shourma",
        is_veg: true,
        amt: 41,
        is_avlbl: true,
    },
]

pending_orders = [
    // {
    //     token: 0,
    //     items: [
    //         {
    //             index: 0,
    //             quantity: 2,
    //         },
    //         {
    //             index: 1,
    //             quantity: 3,
    //         },
    //     ],
    //     total_amt: 110,
    //     status: 0,
    //     details: {
    //         name: "Aniket",
    //         phone: "9636541817",
    //         hostel: "h3",
    //     }
    // },
    // {
    //     token: 1,
    //     items: [
    //         {
    //             index: 0,
    //             quantity: 2,
    //         },
    //         {
    //             index: 1,
    //             quantity: 3,
    //         },
    //     ],
    //     total_amt: 110,
    //     status: 0,
    //     details: {
    //         name: "Aniket",
    //         phone: "9636541817",
    //         hostel: "h3",
    //     }
    // },
]

curr_token = 0

app.get("/get_items", async(req, res) => {
    res.status(201).send({items: items})
})

// app.post("/take_order", async(req, res) => {
//     console.log(req.body)
//     res.status(201).send({token: 1})
// })

app.post("/toggle_item", async(req, res) => {
    data = req.body
    console.log(data)
    items[data.index].is_avlbl = data.toggle_value
    console.log(items)
    res.status(201).send({message: "success"})
})

app.get("/get_pending_orders", async(req, res) => {
    res.status(201).send({orders: pending_orders})
})

app.get('/', async(req, res)=>{
    res.status(200).send("xxxxxxxx");
})

app.post('/take_order', async(req, res) => {
    data = req.body
    data.token = curr_token
    curr_token += 1
    data.status = 0
    pending_orders.push(data)
    res.status(201).send({token: data.token})
})
