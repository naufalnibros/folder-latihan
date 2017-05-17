using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace faktorial
{
    class Program
    {
        static void Main(string[] args)
        {
            int faktor = int.Parse(Console.ReadLine());
            int hasil = 1;
            for (int i = 1; i <= faktor; i++)
            {
                hasil = hasil * i;
            }
            Console.WriteLine(hasil);
         }
    }
}
