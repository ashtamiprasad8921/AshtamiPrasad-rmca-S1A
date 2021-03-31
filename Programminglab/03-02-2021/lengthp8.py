def longestword(wlist):
	word_len = []
	for n in wlist:
		word_len.append((len(n), n))
	word_len.sort()
	return word_len[-1][0], word_len[-1][1]

result =longestword(["Apple", "Mango", "Banana"])
print("\nLongest word: ",result[1])
print("Length of the longest word: ",result[0])
