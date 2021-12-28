require("dotenv").config();
const path = require("path");
const express = require("express");
const app = express();
const chalk = require("chalk");
const PORT = process.env.PORT || 5000;

app.set("view engine", "ejs");
app.set("views", path.join(__dirname, "src/views"));
app.use(express.static(path.join(__dirname, "public")));

// Routes
const apiRouter = require("./src/routes/api");
const mainRouter = require("./src/routes/main");
app.use("/api", apiRouter);
app.use("/", mainRouter);

app.listen(PORT, () =>
    console.info(
        `${chalk.blue("[API]")} Server is running on port ${chalk.redBright(
            PORT
        )}`
    )
);
