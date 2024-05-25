# Membuat function isBalanced
- membuat variable array $allowChar untuk mengikinkan character yang boleh di proses
- membuat variable array $bracketMap untuk validasi tiap bracket
- membuat variable array $bracketActive dengan data kosong untuk validasi bracket yang terakhir active
- membuat variable $res untuk dikembalikan pada function
- melakukan perulangan dengan menghitung panjang string
- validasi jika character yg di input di izinkan untuk di proses
- membuat kondisi jika character tidak ada nilainya di array $bracketMap , dalam kondisi ini indexing menggunakan string jadi apabila character nya "(","{","[" maka akan masuk ke dalam kondisi
- tambahkan character ke dalam array bracketActive yang nantinya akan dijadikan validasi jika kondisi sebelumnya tidak terpenuhi
- membuat variabel untuk menampung bracket yang active
- membuat kondisi jika character sama dengan nilai dari index variabel bracket yang active maka tampung nilai res menjadi "YES" dan jika selalu dalam kondisi ini diakhir akan mengembalikan nilai functionya , 
  jika tidak maka langsung mengembalikan nilai function jadi "NO"