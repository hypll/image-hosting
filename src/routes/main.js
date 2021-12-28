require("dotenv").config();
const router = require("express").Router();
const path = require("path");
const shortid = require("shortid");

const domain = process.env.DOMAIN;
const port = process.env.PORT;

// multer things
const multer = require("multer");
const storage = multer.diskStorage({
    destination: (req, file, cb) => {
        cb(null, "./public/images");
    },

    filename: (req, file, cb) => {
        cb(null, shortid.generate() + path.extname(file.originalname));
    },
});

const upload = multer({
    storage: storage,
});

// default routes

router.get("/", (req, res) => {
    res.json({
        message: "Hello World",
    });
});

router.post("/upload", upload.single("image"), (req, res) => {
    res.send(
        `
        <link rel="stylesheet" href="https://unpkg.com/hypestyle@0.1.5/dist/css/hypestyle.min.css">

        <h1 class="text-center mt-2 font-md">You have successfully uploaded an image!</h1> <br> 
        <p class="text-center">Use this url to view it: <a class="text-primary-dark-1 c-pointer" target="_blank" href="/images/${req.file.filename}">${req.file.filename}</a></p><br/>
        <div class="w-full text-center">
        <a class="btn btn-gray text-white tr-sm font-md bs-lg c-pointer" href="https://imghost.hypll.org/">Upload another image</a>
        </div>`
    );
});

module.exports = router;
