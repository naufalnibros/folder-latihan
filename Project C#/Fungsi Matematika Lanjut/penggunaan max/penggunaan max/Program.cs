using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace penggunaan_max
{
    class Program
    {
        static void Main(string[] args)
        {
            // Mencari niai Maximum (Paling besar)
            int A = int.Parse(Console.ReadLine());
            int B = int.Parse(Console.ReadLine());
            
            Console.WriteLine(Math.Max(A, B));
        }
    }
}
