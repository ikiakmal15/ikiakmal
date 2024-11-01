# Tugas no 1
kendaraan = ['mk5', 'mobil', '3500', 'hitam', '4 roda',]
print(kendaraan)
kendaraan.append('5miliar')
kendaraan.append('matic')
print(kendaraan)
kendaraan.insert(2, 'supra')

# Tugas no 2
perhitungan_luas = int(input("Masukkan pilihan (1: persegi, 2: lingkaran, 3: segitiga): "))

match perhitungan_luas:
    case 1:
        sisi = float(input("Masukkan panjang sisi persegi: "))
        luas = sisi * sisi
        print("Luas persegi:", luas)
    case 2:
        jari_jari = float(input("Masukkan jari-jari lingkaran: "))
        luas = 3.14 * jari_jari * jari_jari
        print("Luas lingkaran:", luas)
    case 3:
        alas = float(input("Masukkan panjang alas segitiga: "))
        tinggi = float(input("Masukkan tinggi segitiga: "))
        luas = 0.5 * alas * tinggi
        print("Luas segitiga:", luas)
    case _:
        print("Pilihan tidak valid")