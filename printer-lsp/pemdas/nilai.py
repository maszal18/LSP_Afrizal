while True:
    print ("========================================")

    bilangan = []
    for i in range(int(input("Masukkan jumlah bilangan  : "))):
        bil = int(input(f"Masukkan bilangan ke-{i+1}: "))
        bilangan.append(bil)

    # Mengurutkan bilangan dalam urutan naik dan menemukan bilangan dalam urutan turun
    bilangan_sorted_asc = sorted(bilangan)
    bilangan_sorted_desc = sorted(bilangan, reverse=True)

    # Menemukan nilai maksimum, minimum, dan rata-rata dari bilangan
    max_bilangan = max(bilangan)
    min_bilangan = min(bilangan)
    rata_rata = sum(bilangan) / len(bilangan)

    # Mencetak hasil
    print("Bilangan dalam urutan naik:", bilangan_sorted_asc)
    print("Bilangan dalam urutan turun:", bilangan_sorted_desc)
    print("Nilai maksimum:", max_bilangan)
    print("Nilai minimum:", min_bilangan)
    print("Rata-rata:", rata_rata)

    ulangi = input("Apakah Anda ingin menginput lagi? (y/n): ")
    if ulangi.lower() == "n":
        break