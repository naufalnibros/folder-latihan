using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace nilai_huruf
{
    class Program
    {
        static void Main(string[] args)
        {
            int nilai = int.Parse(Console.ReadLine());
            if (nilai <= 100 && nilai >= 80)
                Console.WriteLine("A");
            else if (nilai <= 79 && nilai >= 66)
                Console.WriteLine("B");
            else if (nilai <= 65 && nilai >= 55)
                Console.WriteLine("C");
            else if (nilai <= 54 && nilai >= 25)
                Console.WriteLine("D");
            else if (nilai <= 24 && nilai >= 0)
                Console.WriteLine("E");
            Console.ReadKey();
        }
    }
}
