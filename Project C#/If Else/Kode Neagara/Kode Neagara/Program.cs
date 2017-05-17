using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Kode_Neagara
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Kode Negara : \n1. Malaysia   \t= 61\n2. Indonesia   \t= 62\n3. Brunei Darussalam = 63\n");
            Console.Write("Masukkan Kode Negara : ");
            int kode = int.Parse(Console.ReadLine());
            if (kode == 61)
                Console.WriteLine("Malaysia");
            else if (kode == 62)
                Console.WriteLine("Indonesia");
            else if (kode == 63)
                Console.WriteLine("Brunei Darussalam");
        }
    }
}
