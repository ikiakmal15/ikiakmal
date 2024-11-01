#soal no.1
value = int(input("Masukan angka "))
if value % 2 == 0 :
    print('bilangan genap')
else:
    print('bilangan ganjil')

#soal no.6  
nilai = int(input('nilai tugas: '))
if nilai >= 75:
    print('lulus') 
else:
    print('lulus')

#soal no 3
usia = int(input('deawasa dan anak-anak: '))
if usia >= 18:
    print('dewasa') 
else:
    print('anak-anak')

#soal no.4
keanggotaan = (input('cek keanggotaan: '))
if keanggotaan == "gold" or keanggotaan == "silver":
    print("Selamat! Anda mendapatkan diskon")

#soal no.5
pembelian = int(input('jumlah pembelian: '))
if pembelian >= 100000:
    jumlah_harga = pembelian - (10*pembelian/100)
    print('selamat anda mendapatkan diskon 10% dari total pembelian', pembelian)
    print('jumlah harga setelah diskon', jumlah_harga)
else:
    print('total pembelian anda', pembelian)