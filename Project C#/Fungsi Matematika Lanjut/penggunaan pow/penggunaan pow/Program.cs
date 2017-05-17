using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace penggunaan_pow
{
    class Program
    {
        static void Main(string[] args)
        {
            // Math.pow() adalah fungsi yang digunakan untuk menghitung operasi pangkat
            double angka, pangkat, hasil;
            Console.Write("Angka : ");
            angka = double.Parse(Console.ReadLine());
            Console.Write("Pangkat : ");
            pangkat = double.Parse(Console.ReadLine());

            hasil = Math.Pow(angka, pangkat);
            Console.WriteLine("Hasil Pangkat = " + hasil);
            Console.ReadLine();
        }
    }
}
