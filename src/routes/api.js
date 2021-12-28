const router = require("express").Router();
const path = require("path");
const fs = require("fs");

router.get("/", (req, res) => {
    res.send("Hello world!");
});

router.get("/images", (req, res) => {
    // get the images from ../images

    // send the images to the client
    fs.readdirSync("./src/images").forEach((file) => {
        res.write(`<img src="/images/${file}">`);
    });
});

module.exports = router;
