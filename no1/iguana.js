function iguana(awal, harimelahirkan, hari, per) {
    a = parseInt(awal);
    b = parseInt(harimelahirkan);
    c = parseInt(hari);
    totalhari = b / c
    nilai_awal = a;
    nilai_akhir = 0;
    nilai = 0
    for (let i = 0; i < totalhari - 1; i++) {
        nilai_awal
        console.log("sebelum lahiran " + nilai_awal)
        keguguran = (nilai_awal * (11 / 100)).toFixed(0)
        console.log("keguguran sebanyak " + keguguran)
        nPasti = nilai_awal - keguguran
        nilai_awal = nPasti + nPasti
        console.log("jumlah kelahiran ke-" + i + " " + nilai_awal)
    }
    console.log(nilai_awal)
}
iguana(2169, 279, 92, 11)