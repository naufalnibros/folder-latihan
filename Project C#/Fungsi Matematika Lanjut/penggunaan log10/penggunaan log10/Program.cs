using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace penggunaan_log10
{
    class Program
    {
        static void Main(string[] args)
        {
            //Menghitung nilai logaritma basis 10
            double angka = double.Parse(Console.ReadLine());
            double hasil = Math.Log10(angka);
            Console.WriteLine(hasil);
        }
    }
}
