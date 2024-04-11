const fs = require("fs");

fs.readFile("../extra/images.txt", (err, data) => {
  if (err) throw err;

  console.log(data.toString());
});
