def fib(n):
	""" Print a Fibonacci series up to n."""
	a, b = 0, 1
	while a < n:
		print(a, end=' ')
		a, b = b, a+b
	print()

def numero_par():
	for num in range(2, 10):
		if num % 2 == 0:
			print("Numero par", num)
			continue
		print("Numero", num)

def primos():
	for n in range(2, 10):
		for x in range(2, n):
			if n % x == 0:
				print(n, 'igual', x, '*', n//x)
				break
		else:
			print(n, 'es número primo')

print("Fibonacci")
fib(2000)

print("\nPares")
numero_par()

print("\nprimos")
primos()