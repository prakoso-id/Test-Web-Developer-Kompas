rows = int(input("Masukan Angka: "))
m = (2 * rows) - 1  
for i in range(0, rows):  
    for j in range(1, m-1):  
        print(end=" ")  
    m = m - 1 
    for j in range(0, i + 1):  
        print(rows-i,end=' ')  
    print(" ")  
