using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Length
{
    class Program
    {
        static void Main(string[] args)
        {
            //Memberikan jumlah panjang karakater dari sebuah string
            string nama;
            int jmlkar;
            Console.Write("Masukkan Nama Anda : ");
            nama = Console.ReadLine();
            jmlkar = nama.Length;
            Console.WriteLine("Nama Anda terdiri dari "+jmlkar+" Karakter");
        }
    }
}
