using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Contoh_While
{
    class Program
    {
        static void Main(string[] args)
        {
            int x = int.Parse(Console.ReadLine());
            int i = 0;
            while (i < x)
            {
                Console.WriteLine("Programmer Trunojoyo");
                i++;
            }
        }
    }
}
