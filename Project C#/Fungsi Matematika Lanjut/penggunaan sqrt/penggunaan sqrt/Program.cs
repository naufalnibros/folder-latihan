using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace penggunaan_sqrt
{
    class Program
    {
        static void Main(string[] args)
        {
            // Math.sqrt() adalah fungsi untuk Mencari nilai akar sebuah angka
            double angka, akar;
            Console.Write("Angka : ");
            angka = double.Parse(Console.ReadLine());
            akar = Math.Sqrt(angka);
            Console.WriteLine("Hasil Akar = " + akar);
            Console.ReadKey();
        }
    }
}
