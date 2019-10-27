def sum_list(n, string, start):
    if n == 0:
        print(string)
    for i in range(start, n + 1):
        sum_list(n - i, string + ' ' + str(i), i)
 
 
n = 4
sum_list(n, '', 1)