using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Luas_Segitiga
{
    class Program
    {
        static void Main(string[] args)
        {
            //Menghitung luas segitiga
            int alas, tinggi;
            double luas;

            Console.Write("Masukkan Alas : ");
            alas = int.Parse(Console.ReadLine());
            Console.Write("Masukkan Alas : ");
            tinggi = int.Parse(Console.ReadLine());

            luas = 0.5 * alas * tinggi;
            Console.WriteLine("Luas Segitiga : " + luas);
        }
    }
}
