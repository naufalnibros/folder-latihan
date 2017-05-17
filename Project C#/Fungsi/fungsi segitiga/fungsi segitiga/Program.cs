using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace fungsi_segitiga
{
    class Program
    {
        static double segitiga(int a, int t)
        {
            double luas = 0.5 * a * t;
            return luas;
        }
        static void Main(string[] args)
        {
            int alas, tinggi, hasil;

            Console.Write("Alas : ");
            alas = int.Parse(Console.ReadLine());
            Console.Write("Tinggi : ");
            tinggi = int.Parse(Console.ReadLine());

            Console.WriteLine("Luas : "+segitiga(alas, tinggi)); 
        }
    }
}
