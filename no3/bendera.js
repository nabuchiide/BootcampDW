function bendera(kalimat){
    arr = kalimat.split("");
    console.log(arr);
    s = "";
    for (let row = 0; row < arr.length; row++){
      for (let col = 0; col < arr.length; col++){       
         if (row == col) {
                  s+=arr[row];
              }
              if (row + col == arr.length - 1) {
                  s+=arr[row];
              }
         s+="*";
      }
      s+="\n"
    }
    console.log(s);
  }
  
  bendera("DUMBWAYSID")

  function bendera1(arr){
    console.log(arr);
    s = "";
    for (let row = 0; row < arr.length; row++){
      for (let col = 0; col < arr.length; col++){       
         if (row == col) {
                  s+=arr[row];
              }
              if (row + col == arr.length - 1) {
                  s+=arr[row];
              }
         s+="*";
      }
      s+="\n"
    }
    console.log(s);
  }
  bendera1(['D','U','M','B','W','A','Y','S','I','D'])