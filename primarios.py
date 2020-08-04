def fib(n):
	""" Print a Fibonacci series up to n."""
	a, b = 0, 1
	while a < n:
		print(a, end='-')
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

def fib2(n):
	""" Retorna una lista conteniendo la serie Fibonacci desde n"""
	result = []
	a, b = 0, 1
	while a < n:
		result.append(a)
		a, b = b, a+b
	return result

print("Fibonacci 2")
f = fib2(100)
print(f)

print("\nFibonacci")
fib(2000)

print("\nPares")
numero_par()

print("\nprimos")
primos()