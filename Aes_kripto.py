from Crypto.Cipher import AES
from Crypto.Util import Counter
from Crypto.Random import get_random_bytes
from base64 import b64encode, b64decode

def encrypt(plain_text, password):
    iv = get_random_bytes(AES.block_size)
    cipher = AES.new(password, AES.MODE_CFB, iv)
    encrypted = cipher.encrypt(plain_text.encode())
    iv_encrypted = iv + encrypted
    return b64encode(iv_encrypted).decode('utf-8')

def decrypt(cipher_text, password):
    iv_encrypted = b64decode(cipher_text.encode('utf-8'))
    iv = iv_encrypted[:AES.block_size]
    encrypted = iv_encrypted[AES.block_size:]
    cipher = AES.new(password, AES.MODE_CFB, iv)
    decrypted = cipher.decrypt(encrypted)
    return decrypted.decode('utf-8')

def main():
    password = b'1y5e7r8t9a9s2o3d'
    choice = int(input('Enter 1 to encrypt, 2 to decrypt: '))
    
    if choice == 1:
        text = input('Enter the text to encrypt: ')
        encrypted_text = encrypt(text, password)
        print('Encrypted:', encrypted_text)
    elif choice == 2:
        cipher_text = input('Enter the text to decrypt: ')
        decrypted_text = decrypt(cipher_text, password)
        print('Decrypted:', decrypted_text)
    else:
        print('Invalid choice. Please enter either 1 or 2.')

if __name__ == '__main__':
    main()
