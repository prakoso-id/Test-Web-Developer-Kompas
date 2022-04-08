rows = int(input("Masukan Angka: "))
for i in range(0, rows + 1):
    for j in range(1, i + 1):
        print(i, end=' ')
    print("\r")

for i in range(rows, 0, -1):
    for j in range(0, i - 1):
        print(i-1, end=' ')
    print("\r")

