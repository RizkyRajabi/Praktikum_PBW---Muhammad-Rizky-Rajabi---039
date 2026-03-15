function contohLet() {
  let y = 10;
  if (true) {
    let y = 20;
    console.log("Nilai dalam blok:", y);
  }
  console.log("Nilai luar blok:", y);
}

contohLet();
