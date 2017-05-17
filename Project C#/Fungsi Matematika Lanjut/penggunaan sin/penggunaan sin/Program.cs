using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace penggunaan_sin
{
    class Program
    {
        static void Main(string[] args)
        {
            //menghitung sin
            double angka = int.Parse(Console.ReadLine());
            double hasil = Math.Sin(angka);
            Console.WriteLine(hasil);
        }
    }
}
