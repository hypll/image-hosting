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
    res.render("uploaded", {
        url: domain,
        image: req.file.filename,
    });
});

module.exports = router;
