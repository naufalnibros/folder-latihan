using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace contoh_for2
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Masukkan Perulangan : ");
            int x = int.Parse(Console.ReadLine());
            for (int i = 1; i<=x; i++) {
                Console.WriteLine("Perulangan ke-"+i);
            }
        }
    }
}
