Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> def CheckVow(string, vowels):
	final = [each for each in string if each in vowels]
	print(len(final))
	print(final)

	
>>> string = "I am a student"
>>> vowels = "AaEeIiOoUu"
>>> CheckVow(string, vowels)
5
['I', 'a', 'a', 'u', 'e']
>>> 