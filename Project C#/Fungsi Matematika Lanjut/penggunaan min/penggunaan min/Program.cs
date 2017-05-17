using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace penggunaan_min
{
    class Program
    {
        static void Main(string[] args)
        {
            //mencari nilai mnimal (terendah)
            int A = int.Parse(Console.ReadLine());
            int B = int.Parse(Console.ReadLine());
            Console.WriteLine(Math.Min(A, B));
        }
    }
}
