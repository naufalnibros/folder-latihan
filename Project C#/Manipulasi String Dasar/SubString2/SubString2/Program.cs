using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SubString2
{
    class Program
    {
        static void Main(string[] args)
        {
            //Mengambil beberapa karakter pada posisi tertenty dari sebuah string
            string nama = "Indonesia";
            string hasil;
            hasil = nama.Substring(0, 4);
            Console.WriteLine(hasil);
        }
    }
}
