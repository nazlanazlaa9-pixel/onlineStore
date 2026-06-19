class Mahasiswa :

    def __init__(self):
        self.nim = ''
        self.name = ''
        self.addres = ''
        self.phone = ''
        print("iam constructed")

    def setNim(self, nim):
        self.nim = nim

    def setAddress(self, address) :
        self.address = address

    def setName(self, name) :
        self.name = name 

    def setPhone(self, phone) :
        self.phone = phone

    def getInfo(self) :
        print('Nim')
        print('Name')
        print('Address')
        print
