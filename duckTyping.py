class Duck:
    def fly(self):
        print("Duck flying")

class Sparrow:
    def fly(self):
        print("Sparrow flying")

class Whale:
    def fly(self):
        print("Whale swimming")

for animal in Duck(), Sparrow(), Whale():
    animal.fly()