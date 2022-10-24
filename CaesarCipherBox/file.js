import { sleep } from 'time';
import * as re from 're';
var choice, flag;

function encrypt() {
  var enc, instr, width;
  instr = "";
  instr = input("\nEnter the Text to Encrypt: ");
  instr = re.sub(" ", "", instr);
  width = Number.parseInt(input("\nEnter the box width of your cipher : "));
  instr += "" * (width - instr.length % width);
  enc = "";

  for (var x = 0, _pj_a = width; x < _pj_a; x += 1) {
    for (var i = x, _pj_b = instr.length; i < _pj_b; i += width) {
      enc += instr[i];
    }
  }

  sleep(3);
  console.log("\nEncrypted Text: " + enc + "\n");
}

function decrypt() {
  var Len, dec, instr, width;
  instr = input("\nEnter the Text to Decrypt: ");
  Len = instr.length;
  width = Number.parseInt(input("\nEnter the box width of your cipher : "));

  if (Len % width !== 0) {
    width = Number.parseInt(Len / width);
    width += 1;
  } else {
    width = Number.parseInt(Len / width);
  }

  dec = "";

  for (var x = 0, _pj_a = width; x < _pj_a; x += 1) {
    for (var i = x, _pj_b = Len; i < _pj_b; i += width) {
      if (instr[i] === "") {
        continue;
      }

      dec += instr[i];
    }
  }

  sleep(3);
  console.log("\nDecrypted Text: " + dec + "\n");
}

if (__name__ === "__main__") {
  flag = 1;

  while (flag) {
    console.log("\n\t\t   Encrypt/Decrypt Text using Caeser Box Cipher\n");
    sleep(2);
    choice = input("\nEnter whether to 'encrypt' or 'decrypt': ");

    if (choice.lower() === "encrypt") {
      encrypt();
      flag = 0;
    } else {
      if (choice.lower() === "decrypt") {
        decrypt();
        flag = 0;
      } else {
        console.log("\nWrong Choice !\n");
        flag = 1;
      }
    }
  }
}
