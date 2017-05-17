using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Luas_Lingkaran
{
    class Program
    {
        static void Main(string[] args)
        {
            //menghitung luas lingkaran
            int r;
            double luas;
            r = int.Parse(Console.ReadLine());
            luas = 3.14 * r * r;
            Console.WriteLine("Luas Segitiga : "+luas);
        }
    }
}
