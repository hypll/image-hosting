const router = require("express").Router();
const path = require("path");
const fs = require("fs");

router.get("/", (req, res) => {
    res.json({
        message: "Welcome to the API",
        endpoints: ["api/images"],
    });
});

router.get("/images", (req, res) => {
    const { staff_key } = require("../data/keys.json");
    const key = req.query.key;

    if (key === staff_key) {
        res.send(fs.readdirSync("./public/images"));
    } else {
        res.send("You have to provide a valid key!");
    }

    if (key != staff_key) {
        req.header("Access-Control-Allow-Origin", "*");
        res.send("Your key was invalid!");
    }
});

module.exports = router;
