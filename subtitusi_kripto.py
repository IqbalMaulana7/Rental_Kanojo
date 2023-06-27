sub_table = {
    'A': 'c',
    'B': 'S',
    'C': 'P',
    'D': ' ',
    'E': ',',
    'F': 'b',
    'G': '5',
    'H': '4',
    'I': 'U',
    'J': 'C',
    'K': 'R',
    'L': 'q',
    'M': 'u',
    'N': 'T',
    'O': 'E',
    'P': 'z',
    'Q': 'o',
    'R': 'i',
    'S': 'Z',
    'T': 'a',
    'U': 'd',
    'V': 'V',
    'W': 'n',
    'X': 'G',
    'Y': 'F',
    'Z': 'Q',
    'a': 'y',
    'b': 'A',
    'c': 'l',
    'd': 'h',
    'e': '2',
    'f': 'm',
    'g': '9',
    'h': 'f',
    'i': 'I',
    'j': 'v',
    'k': 'H',
    'l': '0',
    'm': 'K',
    'n': 's',
    'o': 'W',
    'p': 't',
    'q': '3',
    'r': 'k',
    's': 'g',
    't': 'w',
    'u': 'e',
    'v': 'D',
    'w': '.',
    'x': 'M',
    'y': 'p',
    'z': 'J',
    '0': 'X',
    '1': 'L',
    '2': '1',
    '3': 'j',
    '4': 'r',
    '5': 'Y',
    '6': 'O',
    '7': '6',
    '8': '7',
    '9': 'x',
    ' ': 'B',
    ',': '8',
    '.': 'N'
}

def substitusi_encryption(plain_text, sub_table):
    encrypted_text = ''
    for char in plain_text:
        if char in sub_table:
            encrypted_text += sub_table[char]
        else:
            encrypted_text += char
    return encrypted_text

def substitusi_decryption(encrypted_text, sub_table):
    decrypted_text = ''
    for char in encrypted_text:
        if char in sub_table.values():
            for key, value in sub_table.items():
                if value == char:
                    decrypted_text += key
                    break
        else:
            decrypted_text += char
    return decrypted_text

choice = input("Apakah Anda ingin melakukan 1. enkripsi atau 2. dekripsi ? ")
message = input("Masukkan pesan yang ingin diproses: ")


if choice.upper() == '1':
    encrypted_text = substitusi_encryption(message, sub_table)
    print('Teks terenkripsi:', encrypted_text)
elif choice.upper() == '2':
    decrypted_text = substitusi_decryption(message, sub_table)
    print('Teks terdekripsi:', decrypted_text)
else:
    print('Pilihan tidak valid. Harap masukkan 1 untuk enkripsi atau 2 untuk dekripsi.')
