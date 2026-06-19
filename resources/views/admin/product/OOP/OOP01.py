class PartyAnimal:

   def __init__(self):
    self.x = 0

   def party(self) :
     self.x = self.x + 1
     print("So far",self.x)

timfakul = PartyAnimal()
timfakul.party()
timfakul.party()
timfakul.party()