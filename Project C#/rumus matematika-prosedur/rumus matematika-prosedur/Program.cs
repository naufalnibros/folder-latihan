using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace rumus_matematika_prosedur
{
    class Program
    {
        static void segitiga()
        {
            double alas, tinggi, luas;
            Console.Write("Alas : ");
            alas = double.Parse(Console.ReadLine());
            Console.Write("Tinggi : ");
            tinggi = double.Parse(Console.ReadLine());
            luas = 0.5 * alas * tinggi;
            Console.WriteLine("Luas Segitiga = " + luas);
        }
        static void lingkaran()
        {
            double r, luas;
            Console.Write("Jari-jari : ");
            r = double.Parse(Console.ReadLine());
            luas = 3.14 * r * r;
            Console.WriteLine("Luas Lingkaran : " + luas);
        }
        static void Main(string[] args)
        {
            Console.WriteLine("************************");
            Console.WriteLine(" Aplikasi Luas Bidang ");
            Console.WriteLine("************************");
            Console.WriteLine("[1] Luas Segitiga");
            Console.WriteLine("[2] Luas Lingkaran");
            int pil;
            Console.Write("Pilih [1-2] : ");
            pil = int.Parse(Console.ReadLine());
            if (pil == 1)
                segitiga();
            else if (pil == 2)
                lingkaran();
            Console.ReadLine();
        }
    }
}
