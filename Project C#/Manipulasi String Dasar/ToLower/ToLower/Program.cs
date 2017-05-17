using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ToLower
{
    class Program
    {
        static void Main(string[] args)
        {
            //Memformat sebuah string menjadi huruf kecil semua
            string kalimat = "TEKNIK INFORMATIKA";
            string hasil = kalimat.ToLower();
            Console.WriteLine(hasil);
            Console.ReadKey();
        }
    }
}
