rows = int(input("Masukan Angka: "))
k = 2 * rows - 1
for i in range(0, rows):
    for j in range(0, k):
        print(end=" ")
    k = k - 1
    for j in range(1, i+1):
        print(j, end=" ")
    print("")
    
k = rows - 1

for i in range(rows, -1, -1):
    for j in range(k, 0, -1):
        print(end=" ")
    k = k + 1
    for j in range(1, i+1):
        print(j, end=" ")
    print("")